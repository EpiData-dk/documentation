env.MANUAL_VERSION='1.0'

node {
    stage("Source Checkout") {
        checkout scm
    }

    stage("Package and upload manual") {
        sh "mvn versions:set -DnewVersion=${MANUAL_VERSION}.${BUILD_ID}"
        sh "mvn deploy"
    }
}