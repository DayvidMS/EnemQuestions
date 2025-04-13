# EnemQuestions

- PHPStorm - VisualStudio - Dbeaver - DockerDesktop
- Para subir o ambiente, é necessário ter o nodeJS instalado.
- se estiver usando windows necessário ter o o docker desktop instalado. 

backend 
- entre na pasta api 'cd api'
- rode o comando 'docker-compose up --build -d'
- como não temos um banco de dados compartilhado, rode as migrations com o comando 'php artisan migrate' .
    - voce pode executar isso com o comando 'docker exec -it app php artisan migrate' ou executar o bash do container com o comando 'docker-compose exec app bash', isso vai abrir a linha de comando e ai é só executar o 'php artisan migrate'
- execute os seguintes comandos dentro do container:
    -'php artisan db:seed --class=ExamSeeder' 
    -'php artisan db:seed --class=CourseSeeder' 


frontend 
- entre na pasta web 'cd web'
- necessario ter node instalado
- dentro da pasta 'web' execute o comando 'npm install'
- após instalação execute o comando 'npm run dev'