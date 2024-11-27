<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ffafbd, #ffc3a0, #2193b0, #6dd5ed);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
        }

        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .glass {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen py-4">
    <div class="glass p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Railway Reservation Form</h2>
        <form action="submit_form.php" method="post" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                <input type="text" id="name" name="name" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 ease-in-out transform hover:scale-105">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" id="email" name="email" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 ease-in-out transform hover:scale-105">
            </div>

            <div>
                <label for="contact" class="block text-sm font-medium text-gray-700">Contact Number (10 digits):</label>
                <input type="text" id="contact" name="contact" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 ease-in-out transform hover:scale-105">
            </div>

            <div>
                <label for="departure_station" class="block text-sm font-medium text-gray-700">Departure
                    Station:</label>
                <input type="text" id="departure_station" name="departure_station" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 ease-in-out transform hover:scale-105">
            </div>

            <div>
                <label for="destination" class="block text-sm font-medium text-gray-700">Destination:</label>
                <input type="text" id="destination" name="destination" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 ease-in-out transform hover:scale-105">
            </div>

            <div>
                <label for="date_of_journey" class="block text-sm font-medium text-gray-700">Date of Journey:</label>
                <input type="date" id="date_of_journey" name="date_of_journey" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 ease-in-out transform hover:scale-105">
            </div>

            <div>
                <label for="class" class="block text-sm font-medium text-gray-700">Class:</label>
                <select id="class" name="class" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 ease-in-out transform hover:scale-105">
                    <option value="">Select Class</option>
                    <option value="economy">Economy</option>
                    <option value="business">Business</option>
                    <option value="first">First</option>
                </select>
            </div>

            <div>
                <label for="num_passengers" class="block text-sm font-medium text-gray-700">Number of
                    Passengers:</label>
                <input type="number" id="num_passengers" name="num_passengers" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 ease-in-out transform hover:scale-105">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Payment Method:</label>
                <div class="mt-2 space-y-2">
                    <div class="flex items-center">
                        <input type="radio" id="credit_card" name="payment_Mode" value="credit_card" required
                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                        <label for="credit_card" class="ml-2 block text-sm text-gray-700">Credit Card</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" id="debit_card" name="payment_Mode" value="debit_card" required
                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                        <label for="debit_card" class="ml-2 block text-sm text-gray-700">Debit Card</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" id="paypal" name="payment_Mode" value="paypal" required
                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                        <label for="paypal" class="ml-2 block text-sm text-gray-700">PayPal</label>
                    </div>
                </div>
            </div>

            <div>
                <input type="submit" value="Submit"
                    class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300 ease-in-out transform hover:scale-105">
            </div>
        </form>
    </div>
</body>

</html>