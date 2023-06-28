<?= $this->extend('layout'); ?>


<?= $this->section('content'); ?>

<div class="container">
    <div class="row justify-content-center align-items-center g-2">

        <?php
        $width = 10; // Width of the rectangle
        $height = 15; // Height of the rectangle

        for ($i = 1; $i <= $height; $i++) {
        ?>
            <div class="col">
                <?= $i ?>
            </div>
            <?php
            for ($j = 1; $j <= $width; $j++) {
            ?>
                <button class="col btn btn-primary mx-3" value="<?= $i ?>">
                    <?= $j ?>
                </button>
            <?php // Print a star (or any desired character) for each position
            }
            ?>
            <hr class="mt-4">
            </hr>
        <?php // Move to the next line after each row
        }
        ?>
    </div>

    <button id="submitBtn" class="btn btn-primary">Submit</button>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // Get references to the button elements
        var toggleButtons = document.querySelectorAll('.btn');
        var submitBtn = document.getElementById('submitBtn');

        // Array to store selected button values
        var selectedButtons = [];

        // Add event listeners to handle the button clicks
        toggleButtons.forEach(function(button) {
            if (button === submitBtn) {
                return;
            }
            button.addEventListener('click', function() {
                var buttonValue = parseInt(button.value);
                var buttonInnerHtml = parseInt(button.innerHTML);
                var rows = [buttonValue, buttonInnerHtml];

                if (button.classList.contains('active')) {
                    // If already toggled, remove the "active" class and reset the background color
                    button.classList.remove('active');
                    button.style.backgroundColor = '';

                    var rowIndex = selectedButtons.findIndex(function(row) {
                        // Compare each row with the search criteria
                        return JSON.stringify(row) === JSON.stringify(rows);
                    });

                    // Delete the row if found
                    if (rowIndex !== -1) {
                        selectedButtons.splice(rowIndex, 1);
                    }
                    console.log(selectedButtons);
                } else {
                    // If not toggled, add the "active" class and change the background color
                    button.classList.add('active');
                    button.style.backgroundColor = 'red'; // Change the color here

                    selectedButtons.push(rows);
                    console.log(selectedButtons);
                }
            });
        });

        submitBtn.addEventListener('click', function() {
            $.ajax({
                url: '/Order/<?= $movies['id'] ?>',
                type: 'POST',
                data: JSON.stringify(selectedButtons),
                contentType: 'application/json',
                success: function(response) {
                    // Handle the response data
                    console.log(response); // Example: Log the response to the console
                    // Perform any further processing based on the response data
                },
                error: function(xhr, status, error) {
                    console.error('Request failed with status:', status);
                    // Handle the error or fallback to a default behavior
                }
            });
        });
    </script>

</div>

<?= $this->endsection(); ?>