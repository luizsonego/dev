# dev

Post: curl -i -H "Accept:application/json" -H "Content-Type:application/json" -XPOST "http://localhost:8080/customers/create-customers" -d '{"name": "Maria Aparecida de Souza", "email": "mariasouza@email.com", "cpf":"81258705044"}'                 

Get: curl -i -H "Accept:application/json" "http://localhost:8080/customers/get-customers"  
 
DB: php yii migrate

