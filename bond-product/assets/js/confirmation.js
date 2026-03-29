function showConfirmation() {
    var confirmationDiv = document.getElementById('confirmation');
    var formData = {
        name: document.getElementById('your-name').value,
        kana: document.getElementById('kana').value,
        company: document.getElementById('company-name').value,
        tel: document.getElementById('tel').value,
        email: document.getElementById('your-email').value,
        emailConfirm: document.getElementById('your-email-confirm').value,
        items: document.querySelectorAll('.radio-inner input:checked'),
        quantity: document.getElementById('number').value,
        date: document.getElementById('date').value,
        budget: document.getElementById('budget').value,
        message: document.getElementById('textarea').value
    };
    
    var itemList = '';
    formData.items.forEach(function(item) {
        itemList += item.value + ' ';
    });

    confirmationDiv.innerHTML = `
        <h2>入力内容をご確認ください。</h2><br>
        <p>お名前: ${formData.name}</p><br>
        <p>フリガナ: ${formData.kana}</p><br>
        <p>会社名: ${formData.company}</p><br>
        <p>お電話番号: ${formData.tel}</p><br>
        <p>メールアドレス: ${formData.email}</p><br>
        <p>メールアドレス(確認用): ${formData.emailConfirm}</p><br>
        <p>ご希望商品: ${itemList}</p><br>
        <p>ご希望数量: ${formData.quantity}</p><br>
        <p>ご希望納期: ${formData.date}</p><br>
        <p>ご予算: ${formData.budget}</p><br>
        <p>お問い合わせ内容: ${formData.message}</p>
    `;
    confirmationDiv.style.display = 'block';
}
