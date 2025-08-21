var Wrapper= document.getElementById("wrapper");

var array=['$10','$5','$4','$15','$50'
,'$150','$5','$4','$15','$3'];
var motos=['Good design is obvious. Great...',
            'The best design is the simplest...',
            'Beautiful web designs for you.',
            'Design is the silent ambassador...',
            'Design is thinking made visual. ',
            'Design is where science and art...',
            'Design is not just what you see...',
            'Design is not just what it looks..',
            'Design is not just what it looks...',
            'You want it, we will make it'];
var sellers=['Alfredo',
            'Daniela',
            'BeRight',
            'James Bond',
            'BonVode',
            'Mahlet\'s workshop',
            'Randi\'s Work',
            'Triple Y',
            'Sam Sulek123',
            'Yes Man'];
for (let i = 0; i < array.length; i++) {

    var link=document.createElement('a')
    var item= document.createElement('div');
    var details= document.createElement('div');
    var owner= document.createElement('p');
    var description= document.createElement('p');
    var price= document.createElement('p');
    link.setAttribute("href","giginfo.php")
    link.className="link";
    item.className="item";
    owner.className="owner";
    description.className="description";
    details.className="details";
    Wrapper.append(link);
    link.append(item);
    item.append(details);
    details.append(owner);
    details.append(description);
    details.append(price);
    description.textContent=motos[i];
    price.textContent=array[i];
    owner.textContent=sellers[i];
    
}







