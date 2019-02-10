<?php

namespace App\Controllers;

use App\Entities\Product;

class ProductController
{
    public function index()
    {
        $products = entityManager()->getRepository(Product::class)->findAll();

        return view('products/index', compact('products'));
    }

    public function show($request)
    {
        $productId = $request->parameter('id');

        $repository = entityManager()->getRepository(Product::class);
        $product = $repository->find($productId);

        if ($product === null) {
            echo "Product with ID $productId does not exist.\n";
            exit(1);
        }

        return view('products/show', compact('product'));
    }

    public function create()
    {
        return view('products/create');
    }

    public function store($request)
    {
        $product = new Product(
            $request->input('name')
        );

        $em = entityManager();
        $em->persist($product);
        $em->flush();

        header('Location:'.$_SERVER['HTTP_REFERER']);
    }

    public function edit($request)
    {
        $productId = $request->parameter('id');

        $repository = entityManager()->getRepository(Product::class);
        $product = $repository->find($productId);

        if ($product === null) {
            echo "Product with ID $productId does not exist.\n";
            exit(1);
        }

        return view('products/edit', compact('product'));
    }

    public function update($request)
    {
        $productId = $request->parameter('id');

        $em = entityManager();

        $repository = $em->getRepository(Product::class);
        $product = $repository->find($productId);

        if ($product === null) {
            echo "Product with ID $productId does not exist.\n";
            exit(1);
        }

        $product->setName($request->input('name'));

        $em->flush();

        header('Location:'.$_SERVER['HTTP_REFERER']);
    }

    public function delete($request)
    {
        $productId = $request->parameter('id');

        $em = entityManager();

        $repository = $em->getRepository(Product::class);
        $product = $repository->find($productId);

        if ($product === null) {
            echo "Product with ID $productId does not exist.\n";
            exit(1);
        }

        $em->remove($product);
        $em->flush();

        header('Location:'.$_SERVER['HTTP_REFERER']);
    }
}
