let preveiwContainer = document.querySelector('.confirmation-purchase');
let previewBox = preveiwContainer.querySelectorAll('.confirmation');

document.querySelectorAll('.coffeeContent .card').forEach(product =>{
  product.onclick = () =>{
    preveiwContainer.style.display = 'flex';
    let name = product.getAttribute('data-name');
    previewBox.forEach(preview =>{
      let target = preview.getAttribute('data-target');
      if(name == target){
        preview.classList.add('active');
      }
    });
  };
});

previewBox.forEach(close =>{
  close.querySelector('.buy').onclick = () =>{
    close.classList.remove('active');
    preveiwContainer.style.display = 'none';
    myFunction();
  };
});

function myFunction() {
    alert("Transaction Successfull! Please Check Your Transaction History for Confirmation!");
}

previewBox.forEach(close =>{
  close.querySelector('.no').onclick = () =>{
    close.classList.remove('active');
    preveiwContainer.style.display = 'none';
  };
});
