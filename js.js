function searchBtn(){
    let filter = document.getElementById("input-search").value.toUpperCase();
    let table = document.getElementById("table-data");
    let tr = document.getElementsByTagName("tr");
    
    for(let i=0; i<tr.length; i++){
        let td = tr[i].getElementsByTagName("td")[1];
        if(td){
            let inputValue = td.textContent || td.innerHTML;
            if(inputValue.toUpperCase().indexOf(filter)>-1){
                tr[i].style.display = "";
            }else{
                tr[i].style.display = "none";


            }
        }

    }
}