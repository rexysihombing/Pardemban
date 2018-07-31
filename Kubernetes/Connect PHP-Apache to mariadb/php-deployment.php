apiVersion: extensions/v1beta1
kind: Deployment
metadata:
  name: phpwebserver-deployment
spec:
  replicas: 1
  template:
    metadata:
      labels:
        app: phpwebserver
    spec:
      containers:
      - name: phpwebserver
        image: xyhombing/php-apache:v1
        ports:
        - containerPort: 80
      - name: secret-env
        image: xyhombing/php-apache
        env:
          - name: SECRET_USERNAME
            valueFrom:
              secretKeyRef:
                name: mysecret
                key: username
          - name: SECRET_PASSWORD
            valueFrom:
              secretKeyRef:
                name: mysecret
                key: password
