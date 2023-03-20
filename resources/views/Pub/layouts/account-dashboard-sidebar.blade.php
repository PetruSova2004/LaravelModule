<div class="col-lg-4">
    <div class="card shadow-none mb-3 mb-lg-0">
        <div class="card-body">
            <div class="list-group list-group-flush"><a
                    class="list-group-item d-flex justify-content-between align-items-center bg-transparent"
                    href={{route('dashboards.index')}}>Dashboard
                    <i class='bx bx-tachometer fs-5'></i></a>
                <a href="account-orders.blade.php"
                   class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Orders
                    <i class='bx bx-cart-alt fs-5'></i></a>

                <a
                    class="list-group-item d-flex justify-content-between align-items-center bg-transparent"
                    href={{route('contacts.index')}}>Messages
                    <i class='bx bx-cart-alt fs-5'></i></a>

                <a href="account-downloads.blade.php"
                   class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Downloads
                    <i class='bx bx-download fs-5'></i></a>
                <a href="account-addresses.blade.php"
                   class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Addresses
                    <i class='bx bx-home-smile fs-5'></i></a>
                <a href="account-payment-methods.blade.php"
                   class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Payment
                    Methods <i class='bx bx-credit-card fs-5'></i></a>
                <a
                    class="list-group-item d-flex justify-content-between align-items-center bg-transparent"
                    href={{route('users.index')}}>Account
                    Details <i class='bx bx-user-circle fs-5'></i></a>
                <a
                    class="list-group-item d-flex justify-content-between align-items-center bg-transparent"
                    href={{route('logout')}}>Logout
                    <i class='bx bx-log-out fs-5'></i></a>
            </div>
        </div>
    </div>
</div>
