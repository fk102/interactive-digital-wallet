
function isValid(pForm) {
            var flag = true;
            var categoryErr = pForm.getElementById("categoryErr");
            var amountErr = pForm.getElementById("amountErr");
           

            var category = pForm.category.value;
            var phone = pForm.phone.value;
            var amount = pForm.amount.value;
            

            categoryErr.innerHTML = "";
            amountErr.innerHTML = "";

            if (category === "") {
                categoryErr.innerHtml = "Select Category";
                flag = false;
            }
            if (amount==="") {
                amountErr.innerHtml = "Enter Valid Amount";
                flag = false;
            }

            return flag;
        }

function process(pForm){
    isValid(pForm);
    var xhttp=new XMLHttpRequest();
    xhttp.onload=function(){
        var json=JSON.parse(this.responseText);
        document.getElementById("result").innerHTML=json;
    };
    xhttp.open("POST",pForm.action+"?category="+pForm.category.value,true);
    xhttp.send();
}