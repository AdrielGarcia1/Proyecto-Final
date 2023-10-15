<?php
class CartDetail {
    private $id;
    private $cartId;
    private $productId;
    private $quantity;

    public function __construct($cartId, $productId, $quantity) {
        $this->cartId = $cartId;
        $this->productId = $productId;
        $this->quantity = $quantity;
    }

    public function getId() {
        return $this->id;
    }

    public function getCartId() {
        return $this->cartId;
    }

    public function getProductId() {
        return $this->productId;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    // Puedes agregar otros métodos según las necesidades de tu aplicación, como calcular el precio total de los productos en el detalle del carrito, etc.
}
?>
