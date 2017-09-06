function toggle_details(bid, tid){
    var element = document.getElementById(tid);
    var button = document.getElementById(bid);
    var icon = button.getElementsByTagName('span')[1].getElementsByTagName('i')[0];
    if(element.style.display === 'none'){
        button.style.marginBottom = "0.75rem";
        button.classList.add('is-active');
        icon.classList.remove('fa-angle-down');
        icon.classList.add('fa-angle-up');
        element.style.display = '';
    } else { 
        button.style.marginBottom = "0";
        button.classList.remove('is-active');
        icon.classList.remove('fa-angle-up');
        icon.classList.add('fa-angle-down');
        element.style.display = 'none';
    }
}