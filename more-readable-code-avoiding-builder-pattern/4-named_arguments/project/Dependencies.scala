import sbt._

object Dependencies {

  object Versions {
    val akka     = "2.5.9"
    val akkaHttp = "10.0.11"
  }

  val production = Seq(
    "com.typesafe.scala-logging" %% "scala-logging" % "3.7.2",
    "net.logstash.logback" % "logstash-logback-encoder" % "4.11"
  )

  val test = Seq(
    "org.scalatest" %% "scalatest" % "3.0.5" % Test
  )
}
