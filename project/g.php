<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification System</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200">
    <div class="container mx-auto py-10">
        <h1 class="text-2xl font-bold mb-4">Notification System</h1>

        <!-- PHP Code to fetch notification count from database -->
        <?php
            // Connect to your database and fetch notification count
            $notificationCount = 5; // Replace this with your actual database logic to get the count
        ?>

        <!-- Notification count -->
        <div class="mb-4">
            <p>Notification Count: <span id="notificationCount"><?= $notificationCount ?></span></p>
        </div>

        <!-- Notifications -->
        <div id="notifications" class="space-y-2">
            <!-- PHP Code to fetch notifications from database -->
            <?php
                // Fetch notifications from your database and loop through them
                $notifications = array("Notification 1", "Notification 2", "Notification 3", "Notification 4", "Notification 5");
                foreach ($notifications as $notification) {
            ?>
                    <div class="bg-white p-4 rounded shadow-md flex justify-between">
                        <span><?= $notification ?></span>
                        <button class="bg-red-500 text-white px-2 py-1 rounded" onclick="removeNotification(this)">Remove</button>
                    </div>
            <?php
                }
            ?>
        </div>

        <script>
            function removeNotification(button) {
                // PHP Code to remove notification from the database
                // You can use AJAX or form submission to send a request to the server to remove the notification
                // After successful removal, update the notification count and remove the notification from the UI
                const notification = button.parentElement;
                notification.remove();
                updateNotificationCount();
            }

            function updateNotificationCount() {
                // You can fetch the updated notification count from the server using AJAX or PHP and update it here
                // For now, let's just decrement the count for demonstration purposes
                const countElement = document.getElementById('notificationCount');
                countElement.innerText = parseInt(countElement.innerText) - 1;
            }
        </script>
    </div>
</body>
</html>
