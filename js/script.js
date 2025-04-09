
        function toggleOption(button) {
            // Remove 'active' class from all buttons
            document.querySelectorAll('.option-btn').forEach(btn => {
                btn.classList.remove('active');
                btn.style.backgroundColor = ''; // Reset background color for non-active buttons
                btn.style.color = '#FF6F00';    // Set text color back to original color
            });

            // Add 'active' class to the clicked button
            button.classList.add('active');
            button.style.backgroundColor = '#FF6F00'; // Active button background color
            button.style.color = 'white';             // Active button text color
        }
   