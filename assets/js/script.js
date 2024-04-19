
let values = [];
let atags  = [];
// Get the table element
const table = document.getElementById('user-table');

// Get all rows in the table
const rows = table.getElementsByTagName('tr');
// Loop through each row
for (let i = 0; i < rows.length; i++) {
    // Get all cells in the current row
    const cells = rows[i].getElementsByTagName('td');
    // Loop through each cell in the row
    for (let j = 0; j < cells.length; j++) {
        cell_id = cells[j].innerText;
        values.push(cell_id);
        break;
    }
    for (let y = 0; y < cells.length; y++) {
        if(y == 5){
            atags.push(cells[y]);            
        }
    }
         
}
//console.log(values);
let aa = atags[0].getElementsByTagName('a')  
console.log(aa.innerText);


