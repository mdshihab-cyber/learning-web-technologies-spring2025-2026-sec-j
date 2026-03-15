const UNIT_PRICE = 1000;
const qtyInput = document.getElementById('quantity');
const totalDisplay = document.getElementById('total');
const doneBtn = document.getElementById('doneBtn');
const resetBtn = document.getElementById('resetBtn');

let couponNotified = false;

    qtyInput.addEventListener('input', function() {
        let qty = parseFloat(qtyInput.value);

        if (qty < 0) {
            alert("Error: Quantity cannot be negative.");
            qty = 0;
            qtyInput.value = 0;
        }

        if (isNaN(qty)) qty = 0;
        const total = qty * UNIT_PRICE;
        totalDisplay.value = total;

        doneBtn.addEventListener('click', () => {
        alert(`Order Confirmed! Final Total: $${totalDisplay.value}`);
        });

        if (total > 1000 && !couponNotified) {
            couponNotified = true; 
            
            setTimeout(() => {
                if (parseFloat(totalDisplay.value) > 1000) {
                    alert("Congratulations! You are now eligible for a gift coupon.");
                } else {
                    couponNotified = false; 
                }
            }, 2000);
        }
    });

    resetBtn.addEventListener('click', () => {
        qtyInput.value = "";
        totalDisplay.value = 0;
        couponNotified = false;  
});