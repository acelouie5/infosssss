$(document).ready(function() {
    // Event listener for search input
    $('#searchInput').on('input', function() {
        var searchQuery = $(this).val().toLowerCase();
        filterTable(searchQuery);
    });

    // Function to filter and update table based on search query
    function filterTable(query) {
        $('table tbody tr').each(function() {
            var rowText = $(this).text().toLowerCase();
            if (rowText.includes(query)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }
});

