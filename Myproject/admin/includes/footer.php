</div>
<script>
    // Executes the page first before running this function
    $(document).ready(function() {
        <?php
        if (isset($_SESSION['status'])) {
        ?>
            $.notify("<?= $_SESSION['status'] ?>");
        <?php unset($_SESSION['status']);
        } ?>
    })
</script>
<!--custom js link-->
<script src="scripts/sidebar.js"></script>
<script src="scripts/script.js"></script>
<script src="scripts/searchbar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js" integrity="sha512-efUTj3HdSPwWJ9gjfGR71X9cvsrthIA78/Fvd/IN+fttQVy7XWkOAXb295j8B3cmm/kFKVxjiNYzKw9IQJHIuQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>