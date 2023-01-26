<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
    <div class="side-header">
        <img src="./assets/images/logo.png" width="120" height="120" alt="Library Data Base System">
        <h5 style="margin-top:10px;">Hello, Admin</h5>
    </div>

    <hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="./index.php"><i class="fa fa-home"></i> Dashboard</a>
    <a href="#member_register" onclick="showMembers()"><i class="fa fa-users"></i> Members</a>
    <a href="#librarian" onclick="showAllLibrarians()"><i class="fa fa-th"></i> Librarians</a>
    <a href="#author" onclick="showAllAuthors()"><i class="fa fa-list"></i> Authors</a>
    <a href="#book" onclick="showBooks()"><i class="fa fa-th"></i> Books</a>
    <a href="#book_barrow" onclick="showBookBarrow()"><i class="fa fa-th"></i> Book Barrow</a>
    <a href="#author_writes" onclick="showAuthorWrites()"><i class="fa fa-list"></i> Author-Book</a>

    <!---->
</div>

<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
</div>