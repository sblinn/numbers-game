AEP Cookies Individual Project -- Numbers Game

# TODO -- Config needs to be updated, README.md needs updating. 

- `docker compose build`
- `docker compose up`
- Run migrations -- `docker exec -it aep-project-server php bin/console doctrine:migrations:migrate`  
- Open in: http://localhost:5173/  
- Local testing of API @ http://localhost:8000/



numbers-game/
└─ app/                     # Auto-generated development
    ├─ public/ 
    ├─ src/                 # Browser code
    │  ├─ assets/           #
    │  ├─ components/       # React Components
    │  ├─ hooks/            #
    │  ├─ routes/           #
    │  ├─ services/         #   
    │  ├─ styles/           # Style overrides
    │  ├─ utilities/        # 
    │  ├─ pages/            # File-system routing for frontend views
    │  |  └─ app.tsx        # Home page (/) - where reactive Jotai atoms (config objects) are hydrated
    │  ├─ main.tsx          # Main application entry component with Auth0 
    │  └─ vite-env.d.ts     # 
    ├─ .env
    ├─ .env.development
    ├─ .node-version        # WARN: make sure this matches with what is declared in docker-compose.yaml
    ├─ .prettierrc.json
    ├─ .index.html
    ├─ package.json
    ├─ postcss.config.js
    ├─ tailwind.config.js
    ├─ tsconfig.json
    ├─ tsconfig.node.json
    ├─ vite.config.ts
    │
    │
└─ server/                  # Backend code
    ├─ bin/                 # Auto-generated development recipe files 
    │  ├─ console           # server/bin/console — from the symfony/console / symfony/framework-bundle recipe   
    │  │                    # (entrypoint for php bin/console …)
    │  └─ phpunit           # API endpoints
    │
    ├─ config/              # Config, dependency injection
    ├─ migrations/          # Doctrine ORM migrations (database)
    ├─ public/              # Contains index.php
    ├─ src/                 # Code
    │  ├─ Controller/
    │  ├─ Dto/
    │  ├─ Entity/       
    │  ├─ Exception/
    │  ├─ Repository/
    │  ├─ Serialization/
    │  ├─ Service/
    │  └─ Kernal.php
    │  tests/              # Testing 
    │  var/                # /var/log/dev.log -- where to find local log
    └─ vendor/             # Dependencies -- phpunit, monolog, guzzle, etc     
│  
│
├─ .env
├─ .gitignore
├─ docker-compose.yaml
├─ package.json
└─ README.json

