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
    
    sudo chmod 777 storage/framework/session
    sudo chmod 777 storage/framework/views
    sudo chmod -R 777 storage/framework/cache
    sudo chmod 777 storage/logs
    
## Run

  Run in console follow command:
    
    docker-compose up

  Open in browser:
    
    http://kovalenko.test:8081/

    
    