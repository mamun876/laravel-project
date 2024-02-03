<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active">
                    <a href="index.html"><img src="{{asset('assets/img/icons/dashboard.svg')}}" alt="img"><span> Dashboard</span> </a>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{asset('assets/img/icons/product.svg')}}" alt="img"><span> Product</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('product.list')}}">Product List</a></li>
                        <li><a href="{{route('product.create')}}">Add Product</a></li>
                        <li><a href="{{route('category.list')}}">Category List</a></li>
                        <li><a href="{{route('category.create')}}">Add Category</a></li>

                        <li><a href="{{route('brand.list')}}">Brand List</a></li>
                        <li><a href="{{route('brand.create')}}">Add Brand</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{asset('assets/img/icons/sales1.svg')}}" alt="img"><span> Sales</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('sales.list')}}">Sales List</a></li>
                        <li><a href="pos.html">POS</a></li>
                        <li><a href="{{route('sales.create')}}">Add New Sales</a></li>
                        <li><a href="">Sales Return List</a></li>
                        <li><a href="createsalesreturns.html">New Sales Return</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{asset('assets/img/icons/purchase1.svg')}}" alt="img"><span> Purchase</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('purchase.list')}}">Purchase List</a></li>
                        <li><a href="{{route('purchase.create')}}">Add Purchase</a></li>
                        <li><a href="importpurchase.html">Import Purchase</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{asset('assets/img/icons/expense1.svg')}}" alt="img"><span> Expense</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('expense.list')}}">Expense List</a></li>
                        <li><a href="{{route('expense.create')}}">Add Expense</a></li>
                        <li><a href="expensecategory.html">Expense Category</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{asset('assets/img/icons/quotation1.svg')}}" alt="img"><span> Quotation</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('quotation.list')}}">Quotation List</a></li>
                        <li><a href="{{route('quotation.create')}}">Add Quotation</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{asset('assets/img/icons/transfer1.svg')}}" alt="img"><span> Transfer</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('transfer.list')}}">Transfer List</a></li>
                        <li><a href="{{route('transfer.create')}}">Add Transfer </a></li>
                        <li><a href="importtransfer.html">Import Transfer </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{asset('assets/img/icons/return1.svg')}}" alt="img"><span> Return</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('sales_return.list')}}">Sales Return List</a></li>
                        <li><a href="{{route('sales_return.create')}}">Add Sales Return </a></li>
                        <li><a href="{{route('purchase_return.list')}}">Purchase Return List</a></li>
                        <li><a href="{{route('purchase_return.create')}}">Add Purchase Return </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{asset('assets/img/icons/users1.svg')}}" alt="img"><span> People</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('customer.list')}}">Customer List</a></li>
                        <li><a href="{{route('customer.create')}}">Add Customer </a></li>
                        <li><a href="supplierlist.html">Supplier List</a></li>
                        <li><a href="addsupplier.html">Add Supplier </a></li>
                        <li><a href="userlist.html">User List</a></li>
                        <li><a href="adduser.html">Add User</a></li>
                        <li><a href="storelist.html">Store List</a></li>
                        <li><a href="addstore.html">Add Store</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{asset('assets/img/icons/places.svg')}}" alt="img"><span> Places</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('place.list')}}">New Country</a></li>
                        <li><a href="countrieslist.html">Countries list</a></li>
                        <li><a href="newstate.html">New State </a></li>
                        <li><a href="statelist.html">State list</a></li>
                    </ul>
                </li>
             
            </ul>
            <a class="dropdown-item logout pb-0" href="/"><img src="{{asset('assets/img/icons/log-out.svg')}}" class="me-2" alt="img">Logout</a>
        </div>
    </div>
</div>