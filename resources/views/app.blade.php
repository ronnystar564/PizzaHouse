@extends('layout.layout')
@section('title', 'Home - Pizza House')

@section('content')

<section class="menu">
    <div class="container">
    <img src = "/img/image.png.jpg" alt ="pizza house logo">
        <h2>Our Menu</h2>
        <ul>
            <li>Pepperoni Pizza</li>
            <li>Margherita Pizza</li>
            <li>Vegetarian Pizza</li>
            <li>Hawaiian Pizza</li>
        </ul>
    </div>
</section>
<section class="about">
    <div class="container">
        <h2>About Us</h2>
        <p>Pizza House is dedicated to serving the finest pizzas in the North. Our recipes are crafted with love and care, using only the freshest ingredients sourced locally.</p>
    </div>
</section>
@endsection

