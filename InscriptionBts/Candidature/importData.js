const form = document.querySelector('#myForm');

form.addEventListener('submit', (event) => {
  event.preventDefault(); // prevent the default form submission behavior
  const codeInput = document.querySelector('#codeInput').value;
  const nameInput = document.querySelector('#nameInput');
  const emailInput = document.querySelector('#emailInput');
  const typebacInput = document.querySelector('#typebacInput');
  const moyenInput = document.querySelector('#moyenInput');
  const telInput = document.querySelector('#telInput');


  // Load the Excel file using SheetJS
  const xhr = new XMLHttpRequest();
  xhr.open('GET', 'candidature.xlsx', true);
  xhr.responseType = 'arraybuffer';
  xhr.onload = function() {
    const data = new Uint8Array(xhr.response);
    const workbook = XLSX.read(data, { type: 'array' });

    // Get the first sheet in the workbook
    const sheet = workbook.Sheets[workbook.SheetNames[0]];

    // Search for the name in the sheet and get the corresponding data
    const range = XLSX.utils.decode_range(sheet['!ref']);
    for (let rowNum = range.s.r + 1; rowNum <= range.e.r; rowNum++) {
      const codeCell = sheet[XLSX.utils.encode_cell({ r: rowNum, c: 5 })];
      if(codeCell && codeCell.v === codeInput){
        const nameCell = sheet[XLSX.utils.encode_cell({ r: rowNum, c: 2 })];
        if (nameCell) {
          nameInput.value = nameCell.v;
        }
        const emailCell = sheet[XLSX.utils.encode_cell({ r: rowNum, c: 1 })];
        if (emailCell) {
          emailInput.value = emailCell.v;
        }
        const typedebacCell = sheet[XLSX.utils.encode_cell({ r: rowNum, c: 3 })];
        if(typedebacCell){
          typebacInput.value = typedebacCell.v
        }  
        const moyenCell = sheet[XLSX.utils.encode_cell({ r: rowNum, c: 4 })];
        if (moyenCell) {
          moyenInput.value = moyenCell.v;
        }
        const telCell = sheet[XLSX.utils.encode_cell({ r: rowNum, c: 14 })];
        if (telCell) {
          telInput.value = telCell.v;
        }
      
        break;
      }
    }
  };
  xhr.send();
});