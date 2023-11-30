FROM node:21-alpine3.17
WORKDIR /app
COPY / /app/
RUN npm install
CMD [ "node", "index.js" ]
EXPOSE 3000

# FROM node:21-alpine3.17: Używa obrazu Docker z oficjalnej biblioteki Node.js w wersji 21, opartego na lekkim systemie Alpine Linux 3.17. Jest to bazowy obraz, na którym zbudujemy naszą aplikację.

# WORKDIR /app: Ustawia katalog roboczy w kontenerze na /app. Wszystkie późniejsze instrukcje będą wykonywane w tym katalogu.

# COPY / /app/: Kopiuje zawartość bieżącego katalogu (czyli katalogu, w którym znajduje się Dockerfile) do katalogu /app w kontenerze. Jest to sposób na umieszczenie kodu źródłowego Twojej aplikacji 
# wewnątrz kontenera.

# RUN npm install: Instaluje zależności Twojej aplikacji, używając menedżera pakietów npm.

# CMD [ "node", "index.js" ]: Ustawia domyślne polecenie, które zostanie uruchomione, gdy kontener zostanie wystartowany. W tym przypadku uruchamia plik index.js za pomocą środowiska wykonawczego Node.js.

# EXPOSE 3000: Otwiera port 3000 w kontenerze, co pozwala na dostęp do aplikacji uruchomionej w kontenerze na tym konkretnym porcie. Jednak samo użycie EXPOSE nie otwiera tego portu na zewnątrz kontenera;
# to jest jedynie dokumentacja informująca, że aplikacja wewnątrz kontenera nasłuchuje na danym porcie.