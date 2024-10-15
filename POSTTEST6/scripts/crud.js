deleteBtn = document.getElementById('deleteBtn')

deleteBtn.onclick = function(event) {
    event.preventDefault(); 
    var confirmDelete = confirm("Are you sure you want to delete your account? This action cannot be undone.");
    if (confirmDelete) {
        window.location.href = "delete.php";
    }
};