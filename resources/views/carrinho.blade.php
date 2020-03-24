@extends('layouts.master')

@section('content')

<main>
    <h1 class="tituloprincipal">Carrinho de Compras</h1>
    <div class="container">
    <div class="row"> 
<div class="shopping-cart">
  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Produto</label>
    <label class="product-price">Preço</label>
    <label class="product-quantity">Quantidade</label>
    <label class="product-removal">Remover</label>
    <label class="product-line-price">Total</label>
  </div>

  <div class="product">
    <div class="product-image">
      <img src="{{ asset('../img/livros/9788535923438.jpg') }}">
    </div>
    <div class="product-details">
      <div class="product-title">Eu sou Malala</div>
      <p class="product-description">A história da garota que defendeu o direito à educação e foi baleada pelo Talibã</p>
    </div>
    <div class="product-price" style="color:#507642;">32,00</div>
    <div class="product-quantity">
      <input type="number" value="2" min="1">
    </div>
    <div class="product-removal">
      <button class="remove-product">
        Remover
      </button>
    </div>
    <div class="product-line-price" style="color:#507642;">32,00</div>
  </div>

  <div class="totals">
    <div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal">32,00</div>
    </div>
    <!-- <div class="totals-item">
      <label>Tax (5%)</label>
      <div class="totals-value" id="cart-tax">3.60</div>
    </div> -->
    <!-- <div class="totals-item">
      <label>Frete</label>
      <div class="totals-value" id="cart-shipping">15.00</div>
    </div> -->
    <div class="totals-item totals-item-total">
      <label>Valor Total</label>
      <div class="totals-value" id="cart-total">32,99</div>
    </div>
  </div>
      
      <button class="checkout">FINALIZAR COMPRA</button>
      </div>   
    </div>      
</div> 
</main>
@stop
