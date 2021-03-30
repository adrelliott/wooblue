<?php require('partials/header.php'); ?>
<?php require('../src/sendinblue/contacts/getAllContacts.php'); ?>
<?php require('../src/woocommerce/orders/getAllOrders.php'); ?>
<!-- index.php -->
<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
        >
        Dashboard
        </h2>




        <!-- Cards -->
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Card -->
            <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                >
                <div
                    class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                    >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                        ></path>
                    </svg>
                </div>
                <div>
                    <p
                        class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                        >
                        Total contacts
                    </p>
                    <p
                        class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                        >
                        <?php echo $contacts['count']; ?>
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                >
                <div
                    class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
                    >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            fill-rule="evenodd"
                            d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </div>
                <div>
                    <p
                        class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                        >
                        Total Sales
                    </p>
                    <p
                        class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                        >
                        <?php
                            $sum = 0;
                            $count = 0;
                            $customers = [];
                            foreach ($orders as $key=>$order) {
                                if (isset($order->total)) {
                                    $sum += $order->total;
                                }
                                $count++;
                                $customers[] = $order->billing->email;
                            }
                            $unique_customers = count(array_unique($customers));

                        ?>
                        £<?php echo $sum; ?>
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                >
                <div
                    class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
                    >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
                        ></path>
                    </svg>
                </div>
                <div>
                    <p
                        class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                        >
                        Total sales
                    </p>
                    <p
                        class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                        >
                        <?php echo $count; ?>
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                >
                <div
                    class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
                    >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            fill-rule="evenodd"
                            d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </div>
                <div>
                    <p
                        class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                        >
                        Unique Customers
                    </p>
                    <p
                        class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                        >
                        <?php echo $unique_customers; ?>
                    </p>
                </div>
            </div>
        </div>
        <!-- Contacts Table -->
        <h2 class="mb-4" >Contacts (from SendinBlue)</h2>
        <div class="w-full overflow-hidden rounded-lg shadow-xs mb-32">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                            >
                            <th class="px-4 py-3">Contact</th>
                            <th class="px-4 py-3">Amount spent</th>
                            <th class="px-4 py-3">Date Added</th>
                        </tr>
                    </thead>
                    <tbody
                        class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                        >
                        <?php foreach ($contacts['contacts'] as $contact): ?>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div
                                        class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                        >
                                        <img
                                        class="object-cover w-full h-full rounded-full"
                                        src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                        alt=""
                                        loading="lazy"
                                        />
                                        <div
                                            class="absolute inset-0 rounded-full shadow-inner"
                                            aria-hidden="true"
                                        ></div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">
                                            <?php echo $contact['email']; ?>
                                        </p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                            <?php
                                                if (isset($contact['attributes']->FIRSTNAME)) {
                                                    echo $contact['attributes']->FIRSTNAME;
                                                }
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                £863.45
                            </td>
                            <td class="px-4 py-3 text-sm">
                                16/10/2020
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
            <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
                >
                <span class="flex items-center col-span-3">
                    Showing 0-5 of <?php echo $contacts['count']; ?>
                </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                        <ul class="inline-flex items-center">
                            <li>
                                <button
                                class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                aria-label="Previous"
                                >
                                <svg
                                    aria-hidden="true"
                                    class="w-4 h-4 fill-current"
                                    viewBox="0 0 20 20"
                                    >
                                    <path
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd"
                                        fill-rule="evenodd"
                                    ></path>
                                </svg>
                                </button>
                            </li>
                            <li>
                                <button
                                class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                                >
                                1
                                </button>
                            </li>
                            <li>
                                <button
                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                >
                                2
                                </button>
                            </li>
                            <li>
                                <button
                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                >
                                3
                                </button>
                            </li>
                            <li>
                                <button
                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                >
                                4
                                </button>
                            </li>
                            <li>
                                <span class="px-3 py-1">...</span>
                            </li>

                            <li>
                                <button
                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                >
                                3,408
                                </button>
                            </li>
                            <li>
                                <button
                                class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                aria-label="Next"
                                >
                                <svg
                                    class="w-4 h-4 fill-current"
                                    aria-hidden="true"
                                    viewBox="0 0 20 20"
                                    >
                                    <path
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"
                                        fill-rule="evenodd"
                                    ></path>
                                </svg>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </span>
            </div>
        </div>
        <br><br>

        <!-- Orders Tabe -->
        <h2 class="mb-4 mt-64" >Orders (from WooCommerce)</h2>
        <div class="w-full overflow-hidden rounded-lg shadow-xs mb-32">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                            >
                            <th class="px-4 py-3">ID</th>
                            <th class="px-4 py-3">Customer</th>
                            <th class="px-4 py-3">Items</th>
                            <th class="px-4 py-3">£</th>
                        </tr>
                    </thead>
                    <tbody
                        class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                        >
                        <?php foreach ($orders as $order): ?>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                <?php echo $order->id; ?>
                            </td>
                            <td class="px-4 py-3">
                                <div class=" text-sm">
                                    <div>
                                        <p class="font-semibold">
                                            <?php echo $order->billing->first_name . ' ' . $order->billing->last_name; ?>
                                        </p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                            <?php echo $order->billing->email ?>
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <div class="flex flex-col items-left text-sm">
                                    <?php foreach ($order->line_items as $line_item): ?>
                                    <div class="">
                                        <p class="text-xs ">
                                            <?php
                                                echo
                                                $line_item->product_id
                                                . '  ' .
                                                $line_item->name
                                                . ' x ' .
                                                $line_item->quantity
                                            ?>
                                        </p>
                                    </div>
                                <?php endforeach; ?>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                £<?php echo $order->total; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
            <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
                >
                <span class="flex items-center col-span-3">
                    Showing 0-<?php echo $count; ?> of <?php echo $count; ?>
                </span>
            </div>
        </div>
        <!-- Charts -->
        <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
        >
        Charts
        </h2>
        <div class="grid gap-6 mb-8 md:grid-cols-2">
            <div
                class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                >
                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                Revenue
                </h4>
                <canvas id="pie"></canvas>
                <div
                    class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400"
                    >
                    <!-- Chart legend -->
                    <div class="flex items-center">
                        <span
                            class="inline-block w-3 h-3 mr-1 bg-blue-500 rounded-full"
                        ></span>
                        <span>Shirts</span>
                    </div>
                    <div class="flex items-center">
                        <span
                            class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"
                        ></span>
                        <span>Shoes</span>
                    </div>
                    <div class="flex items-center">
                        <span
                            class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"
                        ></span>
                        <span>Bags</span>
                    </div>
                </div>
            </div>
            <div
                class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                >
                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                Traffic
                </h4>
                <canvas id="line"></canvas>
                <div
                    class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400"
                    >
                    <!-- Chart legend -->
                    <div class="flex items-center">
                        <span
                            class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"
                        ></span>
                        <span>Organic</span>
                    </div>
                    <div class="flex items-center">
                        <span
                            class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"
                        ></span>
                        <span>Paid</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- /index.php -->
<?php require('partials/footer.php'); ?>
