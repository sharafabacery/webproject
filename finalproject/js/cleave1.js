var cleave = new Cleave('#input-cc', {
    creditCard: true,
    onCreditCardTypeChanged: function (type) {
        console.log(type);
    }
});

        var cc_type = 'unknown';
        var cleave = new Cleave('#input-cc', {
            creditCard: true,
            delimiter: '-',
            onCreditCardTypeChanged: function (type) {
                console.log(type);
                cc_type = type;
            }
        });

        $('#check-cc').click(function(){
            alert(cleave.getFormattedValue() + ' is a ' + cc_type + ' card');
        });
        var cc_type = 'unknown';
        var cleave = new Cleave('#input-cc', {
            creditCard: true,
            delimiter: '-',
            onCreditCardTypeChanged: function (type) {
                console.log(type);
                cc_type = type;
            }
        });
        $('#check-cc').click(function(){
            alert(cleave.getFormattedValue() + ' is a ' + cc_type + ' card');
        });