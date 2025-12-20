<?php
$pageTitle = "Thank You for Your Order - FORBIX SEMICON";
$pageDescription = "Thank you for purchasing FORBIX SEMICON products. Your order has been successfully processed.";
include __DIR__ . '/includes/header.php';

$order_id = isset($_GET['order_id']) ? htmlspecialchars($_GET['order_id']) : 'N/A';
?>

<div class="container mx-auto px-4 py-16">
    <div class="max-w-2xl mx-auto text-center">
        <div class="mb-8">
            <span class="material-icons text-6xl text-green-500">check_circle</span>
        </div>
        
        <h1 class="text-4xl font-bold mb-4 text-gray-800 dark:text-gray-200">Thank You for Your Order!</h1>
        
        <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
            Your payment has been processed successfully.<br>
            Order ID: <?php echo $order_id; ?>
        </p>
        
        <p class="text-gray-600 dark:text-gray-400 mb-8">
            We have sent a confirmation email with your order details.<br>
            Our team will process your order shortly.
        </p>
        
        <div class="space-y-4">
            <a href="index.php" 
               class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                Return to Homepage
            </a>
            
            <p class="text-sm text-gray-500 dark:text-gray-400">
                If you have any questions about your order,<br>
                please contact us at support@forbixindia.com
            </p>
        </div>
    </div>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
