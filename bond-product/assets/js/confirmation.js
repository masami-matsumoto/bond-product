function showConfirmation() {
    var confirmationDiv = document.getElementById('confirmation');
    var formData = {
        name: document.getElementById('your-name').value,
        kana: document.getElementById('kana').value,
        company: document.getElementById('company-name').value,
        tel: document.getElementById('tel').value,
        email: document.getElementById('your-email').value,
        emailConfirm: document.getElementById('your-email-confirm').value,
        items: document.querySelectorAll('input[name="checkbox"]:checked'),
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
        <h2>確認画面</h2>
        <p>お名前: ${formData.name}</p>
        <p>フリガナ: ${formData.kana}</p>
        <p>会社名: ${formData.company}</p>
        <p>お電話番号: ${formData.tel}</p>
        <p>メールアドレス: ${formData.email}</p>
        <p>メールアドレス(確認用): ${formData.emailConfirm}</p>
        <p>ご希望商品: ${itemList}</p>
        <p>ご希望数量: ${formData.quantity}</p>
        <p>ご希望納期: ${formData.date}</p>
        <p>ご予算: ${formData.budget}</p>
        <p>お問い合わせ内容: ${formData.message}</p>
    `;
    confirmationDiv.style.display = 'block';
}

function redirectToThanksPage() {
    // ページ移動（リダイレクト）する
    window.location.href = 'https://bond-product.co.jp/thanks/'; // 'URL'を実際のTHANKSページのURLに置き換える
}