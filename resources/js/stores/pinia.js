import { defineStore } from 'pinia';
import Swal from 'sweetalert2';

export const useShoppingStore = defineStore('shopping', {
    state: () => ({
        cartItems: []
    }),

    getters: {
        countCartItems() {
            return this.cartItems.reduce((acc, item) => acc + item.quantity, 0);
        },
        getCartItems() {
            return this.cartItems;
        },
        getCartTotal() {
            if (!Array.isArray(this.cartItems)) return 0;
            const total = this.cartItems.reduce((acc, item) => {
                const price = Number(item.price) * item.quantity;
                if (Number.isNaN(price)) return acc;
                return acc + price;
            }, 0);
            return total.toFixed(2);
        },
    },

    actions: {
        addToCart(item) {
            const existingProduct = this.cartItems.find(product => product.id === item.id);

            if (existingProduct) {
                existingProduct.quantity++;
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Quantité augmentée avec succès',
                    showConfirmButton: false,
                    timer: 1500
                });
            } else {
                this.cartItems.push({ ...item, quantity: 1 });
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Ajout au panier avec succès',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        },

        removeFromCart(item) {
            this.cartItems = this.cartItems.filter(product => product.id !== item.id);
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Supprimer du panier',
                showConfirmButton: false,
                timer: 1500
            });
        },

        increaseQuantity(item) {
            const existingProduct = this.cartItems.find(product => product.id === item.id);

            if (existingProduct) {
                existingProduct.quantity++;
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Quantité  augmentée avec succès',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        },

        decreaseQuantity(item) {
            const existingProduct = this.cartItems.find(product => product.id === item.id);

            if (existingProduct && existingProduct.quantity > 1) {
                existingProduct.quantity--;
                Swal.fire({
                    position: 'top-end',
                    icon: 'warning',
                    title: 'Quantité diminuée avec succès',
                    showConfirmButton: false,
                    timer: 1500
                });
            } else {
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Quantité du produit ne peut pas être inférieure à 1',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        },

        clearCart() {
            this.cartItems = [];
            Swal.fire({
                position: 'top-end',
                icon: 'info',
                title: 'Panier vidé',
                showConfirmButton: false,
                timer: 1500
            });
        }
    }
});
