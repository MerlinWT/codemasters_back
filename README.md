## Prepare application
  Add into `hosts`:
  
    127.0.0.1 kovalenko.test
    
  Create `.env` file in `app` (rename `.env.exemple`) 
  
  Set follow variables:
  
    DB_HOST=mysql
    DB_PASSWORD=root
    
  Install dependencies:
  
    composer install
    
  Set permissions
    
    chmow 777 storage/framework/session
    chmow 777 storage/framework/views
    chmod -R 777 storage/framework/cache
    chmow 777 storage/logs
    
## Run

  Run in console follow command:
    
    docker-compose up

  Open in browser:
    
    http://kovalenko.test:8081/
    
## API

Api end-points

### Auth 

    curl --header "Content-Type: application/json" --request POST --data '{"login": "admin", "password": "root"}' http://kovalenko.test:8081/api/auth    

Response example

    {"token":"82d4586e810040b9317939b14b32ef9b"}
    
    