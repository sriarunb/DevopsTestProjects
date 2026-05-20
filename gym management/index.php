cat << 'EOF' | sudo tee /var/www/html/index.php
<?php
// ಇದು ಆಟೋಮ್ಯಾಟಿಕ್ ಆಗಿ ನಿಮ್ಮನ್ನು ಲಾಗಿನ್ ಪೇಜ್‌ಗೆ ರೀಡೈರೆಕ್ಟ್ ಮಾಡುತ್ತದೆ
header("Location: /gym-management/login/login.php");
exit;
?>
EOF

