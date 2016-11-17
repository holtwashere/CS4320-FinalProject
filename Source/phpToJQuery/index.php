<!DOCTYPE html>
<html lang="en">
  <head>
      <title>OCDX</title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>
        <div id="includedHeader"></div>
        <script>$("#includedHeader").load("header.php");</script>
  </head>
<body>
    <div id="includedNav"></div>
    <script>$("#includedNav").load("nav.php");</script>
    <main id="index-banner">
        <div class="section">
            <div class="container">
                <div id="table-header">
                    <h2 id="ocdx-title" class="header center teal-text text-lighten-2">Open Community Data Exchange</h2>
                    <div class="row center">
                        <h6 class="header col s12 light">The OCDX community supports an open standard for describing data about online communities, as well as the support tools and workflow patterns for researchers and data providers to share their datasets with the wider community. The OCDX community aims to provide the lowest barriers to contributing/sharing data. We welcome your input, suggesting fields information for inclusion in the OCDX specification.
                        </h6>
                    </div>
                </div>
                <div class="row center">
                    <div id="includedSearchBox"></div>
                    <script>$("#includedSearchBox").load("searchBox.php");</script>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div id="searchResults">
                        <table id="manifest-table" class="highlight">

                        </table>
                    </div>
                </div>
            </div>
        </div>
      </main>
        <div id="includedFooter"></div>
        <script>$("#includedFooter").load("footer.php");</script>
</body>

</html>