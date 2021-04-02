<?php
print "<!doctype html>\n";
print "<html lang=\"en\">\n";
print "\n";
print "<head>\n";
print "  <!-- To implement bootstrap in a page, type b4-$ -->\n";
print "  <title>RateMyScholar</title>\n";
print "  <!-- Icon for the browser tab -->\n";
print "  <link rel=\"icon\" type=\"image/png\" href=\"../resources/placeholder_logo.png\" sizes=\"16x16\">\n";
print "  <!-- Required meta tags -->\n";
print "  <meta charset=\"utf-8\">\n";
print "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">\n";
print "\n";
print "  <!-- Bootstrap CSS -->\n";
print "  <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">\n";
print "  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"\n";
print "    integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">\n";
print "  <link rel=\"stylesheet\" type=\"text/css\" href=\"../CSS/index.css\">\n";
print "\n";
print "</head>\n";
print "\n";
print "<body>\n";
print "  <!-- Navigation bar -->\n";
print "  <header>\n";
print "  <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\" style=\"margin-bottom: 12px;\">\n";
print "    <a class=\"navbar-brand\" href=\"index.html\">Rate My Scholar</a>\n";
print "    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"\n";
print "      aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">\n";
print "      <span class=\"navbar-toggler-icon\"></span>\n";
print "    </button>\n";
print "    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">\n";
print "      <ul class=\"navbar-nav\">\n";
print "        <li class=\"nav-item active\">\n";
print "          <a class=\"nav-link\" href=\"#\">Home<span class=\"sr-only\">(current)</span></a>\n";
print "        </li>\n";
print "        <li class=\"nav-item\">\n";
print "          <a class=\"nav-link\" href=\"register.html\">Register</a>\n";
print "        </li>\n";
print "        <li class=\"nav-item\">\n";
print "          <a class=\"nav-link\" href=\"login.html\">Login</a>\n";
print "        </li>\n";
print "      </ul>\n";
print "    </div>\n";
print "  </nav>\n";
print "</header>\n";
print "  <!-- Optional JavaScript -->\n";
print "  <!-- jQuery first, then Popper.js, then Bootstrap JS -->\n";
print "  <!-- <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>\n";
print "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>\n";
print "    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script> -->\n";
print "  <!-- Jumbotron component -->\n";
print "  <main role=\"main\">\n";
print "  <div class=\"container-fluid\">\n";
print "    <div style=\"padding-top: 10%;\" class=\"jumbotron jumbotron-fluid text-center\" >\n";
print "      <h1 class=\"jumbotron-heading\">Welcome to Rate My Scholar</h1>\n";
print "      <p class=\"text-muted\">\n";
print "        With this complex and incredible site, you can peruse the quality of all your colleagues.\n";
print "        Not just your professor.\n";
print "        <br>\n";
print "      <h5>Begin your search by entering a school below.</h3>\n";
print "        </p>\n";
print "        <!-- Search bar component -->\n";
print "        <div class=\"input-group col-md-12\">\n";
print "          <input class=\"form-control py-2\" type=\"search\" value=\"\" id=\"example-search-input\">\n";
print "          <span class=\"input-group-append\">\n";
print "            <button onclick=\"window.location.href='result.html';\" class=\"btn btn-outline-secondary\" type=\"button\">\n";
print "              <i class=\"fa fa-search\"></i>\n";
print "            </button>\n";
print "          </span>\n";
print "        </div>\n";
print "    </div>\n";
print "    <!--Additional information component -->\n";
print "    <div class=\"container marketing\" style=\"color:white;\">\n";
print "      <!-- Three columns of text below the carousel -->\n";
print "      <div class=\"row\">\n";
print "        <div class=\"col-lg-4\">\n";
print "          <img class=\"rounded-circle\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">\n";
print "          <h2>Students</h2>\n";
print "          <p>This website will allow you to rate your fellow classmates or students of another school. This could be useful if you are deciding who is the best match for a group project.</p>\n";
print "          <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details »</a></p>\n";
print "        </div><!-- /.col-lg-4 -->\n";
print "        <div class=\"col-lg-4\">\n";
print "          <img class=\"rounded-circle\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">\n";
print "          <h2>Professors</h2>\n";
print "          <p>Peruse what colleagues and potentially other professors have to say on another professor to find the best mentors for your school career.</p>\n";
print "          <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details »</a></p>\n";
print "        </div><!-- /.col-lg-4 -->\n";
print "        <div class=\"col-lg-4\">\n";
print "          <img class=\"rounded-circle\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">\n";
print "          <h2>Staff</h2>\n";
print "          <p>Check out the overall perception of the hard-working staff at your school or another who could help you in other matters.</p>\n";
print "          <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details »</a></p>\n";
print "        </div><!-- /.col-lg-4 -->\n";
print "      </div><!-- /.row -->\n";
print "\n";
print "\n";
print "      <!-- START THE FEATURETTES -->\n";
print "      \n";
print "      <hr class=\"featurette-divider\">\n";
print "\n";
print "      <div class=\"row featurette\">\n";
print "        <div class=\"col-md-7\">\n";
print "          <h2 class=\"featurette-heading\">Here is how to get started. <span class=\"text-muted\">It is actually quite simple.</span></h2>\n";
print "          <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>\n";
print "        </div>\n";
print "        <div class=\"col-md-5\">\n";
print "          <img class=\"featurette-image img-fluid mx-auto\" data-src=\"holder.js/500x500/auto\" alt=\"500x500\" style=\"width: 500px; height: 500px;\" src=\"data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_177ca764895%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_177ca764895%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.1171875%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E\" data-holder-rendered=\"true\">\n";
print "        </div>\n";
print "      </div>\n";
print "\n";
print "      <hr class=\"featurette-divider\">\n";
print "\n";
print "      <div class=\"row featurette\">\n";
print "        <div class=\"col-md-7 order-md-2\">\n";
print "          <h2 class=\"featurette-heading\">Afterwards you can specify from school. <span class=\"text-muted\">Or by scholar.</span></h2>\n";
print "          <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>\n";
print "        </div>\n";
print "        <div class=\"col-md-5 order-md-1\">\n";
print "          <img class=\"featurette-image img-fluid mx-auto\" data-src=\"holder.js/500x500/auto\" alt=\"500x500\" src=\"data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_177ca764897%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_177ca764897%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.1171875%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E\" data-holder-rendered=\"true\" style=\"width: 500px; height: 500px;\">\n";
print "        </div>\n";
print "      </div>\n";
print "\n";
print "      <hr class=\"featurette-divider\">\n";
print "\n";
print "      <div class=\"row featurette\">\n";
print "        <div class=\"col-md-7\">\n";
print "          <h2 class=\"featurette-heading\">Now you can pick which scholar and leave a review. <span class=\"text-muted\">Easy as pie.</span></h2>\n";
print "          <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>\n";
print "        </div>\n";
print "        <div class=\"col-md-5\">\n";
print "          <img class=\"featurette-image img-fluid mx-auto\" data-src=\"holder.js/500x500/auto\" alt=\"500x500\" src=\"data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_177ca764898%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_177ca764898%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.1171875%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E\" data-holder-rendered=\"true\" style=\"width: 500px; height: 500px;\">\n";
print "        </div>\n";
print "      </div>\n";
print "\n";
print "      <hr class=\"featurette-divider\">\n";
print "\n";
print "      <!-- /END THE FEATURETTES -->\n";
print "\n";
print "    </div>\n";
print "  </div>\n";
print "</main>\n";
print "</body>\n";
print "\n";
print "</html>";
?>