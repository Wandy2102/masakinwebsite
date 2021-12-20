<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
    <div class="bg-blue-200  p-6">
        <div class="flex items-center">
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ route('food.index') }}">Makanan</a></div>
        </div>
    </div>

    <div class="bg-green-200 p-6 border-t border-gray-200 md:border-t-0 md:border-l">
        <div class="xflex items-center">
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ route('transactions.index') }}">Transaksi</a></div>
        </div>
    </div>

    <div class="bg-red-200 p-6 border-t border-gray-200">
        <div class="flex items-center">
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ route('users.index') }}">User</a></div>
        </div>
    </div>

    <div class="bg-yellow-100 p-6 border-t border-gray-200 md:border-l">
        <div class="flex items-center">
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ route('profile.show') }}">Profile</a></div>
        </div>
    </div>
</div>
