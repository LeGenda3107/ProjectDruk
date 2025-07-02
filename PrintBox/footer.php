  <footer class="footer-minimal py-8">
    <div class="container flex flex-col md:flex-row justify-between items-center text-sm text-gray-500 gap-4">
      <div>© 2024 PrintBox - Преміум платформа 3D друку</div>
      <div class="flex gap-6">
        <a href="faq.php" class="footer-link">Часті питання</a>
        <a href="contact.php" class="footer-link">Контакти</a>
        <a href="terms.php" class="footer-link">Умови використання</a>
        <a href="privacy.php" class="footer-link">Політика конфіденційності</a>
      </div>
    </div>
  </footer>
  <script>
    // Cart animation functionality
    function addToCart(event, modelName, modelEmoji) {
      event.preventDefault();
      event.stopPropagation();
      const animationContainer = document.createElement('div');
      animationContainer.className = 'cart-animation';
      const flyingItem = document.createElement('div');
      flyingItem.className = 'flying-item';
      flyingItem.textContent = modelEmoji;
      const button = event.target;
      const buttonRect = button.getBoundingClientRect();
      const cartButton = document.querySelector('[aria-label="Кошик"]');
      const cartRect = cartButton.getBoundingClientRect();
      flyingItem.style.left = (buttonRect.left + buttonRect.width / 2 - 30) + 'px';
      flyingItem.style.top = (buttonRect.top + buttonRect.height / 2 - 30) + 'px';
      animationContainer.appendChild(flyingItem);
      document.body.appendChild(animationContainer);
      setTimeout(() => {
        flyingItem.style.left = (cartRect.left + cartRect.width / 2 - 30) + 'px';
        flyingItem.style.top = (cartRect.top + cartRect.height / 2 - 30) + 'px';
      }, 50);
      setTimeout(() => {
        cartButton.classList.add('cart-btn-highlight');
      }, 500);
      setTimeout(() => {
        document.body.removeChild(animationContainer);
        cartButton.classList.remove('cart-btn-highlight');
        window.location.href = 'cart.php';
      }, 1000);
    }
    document.addEventListener('DOMContentLoaded', function() {
      const printButtons = document.querySelectorAll('.print-btn');
      const modelEmojis = ['🎨', '📱', '🔌', '🏠', '🎮', '🌱'];
      printButtons.forEach((button, index) => {
        button.addEventListener('click', (e) => {
          addToCart(e, 'Model', modelEmojis[index % modelEmojis.length]);
        });
      });
    });
  </script>
</body>
</html> 