<html>
<body>
    <h2>Local Storage</h2>
    <script type="text/javascript">
        if( localStorage.hits )
            localStorage.hits = Number(localStorage.hits) +1;
        else
            localStorage.hits = 1;
            document.write("Total Hits :" + localStorage.hits );
    </script>
    <p>Refresh the page to increase number of hits.</p>
    <p>Close the window and open it again and check the result.</p>
</body>
</html>