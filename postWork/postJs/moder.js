
const addPost=document.querySelector('.add_post');
const removePost=document.querySelectorAll('.delete_post');

function sendAjax(url, data){
  const request= new XMLHttpRequest();
  request.open('POST',url, true);
  request.responseType = 'json';
  request.setRequestHeader("Content-Type","application/json");
  request.send(JSON.stringify(data));
}

function addPost(){
  const writer=prompt("Введите автора");
  const content=prompt("Введите содержание поста");
  const date=new Date();
  const time=`${date.getHours}:${date.getMinutes}`;

  sendAjax('./postWork/removePost.php',{writer, content, time})
}

function addPost(e){
  const currentBtn=e.currentTarget;
  const postId=currentBtn.parentNode.getAttribute('id');

  sendAjax('./postWork/removePost.php',{postId})
}

removePost.forEach(btn => {
  btn.addEventListener('click',()=>alert('удалили пост'))
});

addPost.addEventListener('click', ()=>alert('Добавили пост'))