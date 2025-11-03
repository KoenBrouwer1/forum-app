# Gebruik de officiële MySQL image
FROM mysql:8.0

# Stel standaard environment variables in
ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_DATABASE=testdb
ENV MYSQL_USER=user
ENV MYSQL_PASSWORD=pass

# Expose de poort zodat je kunt connecten
EXPOSE 3306

# Start de MySQL server
CMD ["mysqld"]
