FROM node:16

WORKDIR /var/www/pokemon-manager-frontend

COPY package*.json ./
RUN npm config set "@fortawesome:registry" https://npm.fontawesome.com/
RUN npm config set "//npm.fontawesome.com/:_authToken" FE180B0C-E255-4027-8474-C1B2F33FAB35
RUN npm install

COPY . .

EXPOSE 3000
CMD ["npm", "start"]
