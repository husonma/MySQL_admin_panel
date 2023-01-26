

function showBooks(){  
    $.ajax({
        url:"./adminView/viewAllBooks.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showAllLibrarians(){  
    $.ajax({
        url:"./adminView/viewAllLibrarians.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showBookBarrow(){  
    $.ajax({
        url:"./adminView/viewBookBarrow.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showAllAuthors(){  
    $.ajax({
        url:"./adminView/viewAllAuthors.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showMembers(){
    $.ajax({
        url:"./adminView/viewMembers.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showAuthorWrites(){
    $.ajax({
        url:"./adminView/viewAuthorWrites.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//delete book 
function bookDelete(id){
    $.ajax({
        url:"./controller/deleteBookController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Book Successfully deleted');
            $('form').trigger('reset');
            showBooks();
        }
    });
}

//author delete
function authorDelete(id){
    $.ajax({
        url:"./controller/deleteAuthorController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Author Successfully deleted');
            $('form').trigger('reset');
            showAllAuthors();
        }
    });
}

//librarian delete
function librarianDelete(id){
    $.ajax({
        url:"./controller/deleteLibrarianController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Librarian Successfully deleted');
            $('form').trigger('reset');
            showAllLibrarians();
        }
    });
}

//member delete
function memberDelete(id){
    $.ajax({
        url:"./controller/deleteMemberController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Member Successfully deleted');
            $('form').trigger('reset');
            showMembers();
        }
    });
}

//author-book delete
function authorBookDelete(id){
    $.ajax({
        url:"./controller/deleteAuthorBookController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Author-Book Successfully deleted');
            $('form').trigger('reset');
            showAuthorWrites();
        }
    });
}

//book-barrow delete
function bookBarrowDelete(id){
    $.ajax({
        url:"./controller/deleteBookBarrowController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Book-Barrow Successfully deleted');
            $('form').trigger('reset');
            showBookBarrow();
        }
    });
}