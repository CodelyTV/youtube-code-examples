import scala.util.Random

object StringMother {
  def random(numChars: Int): String = Random.alphanumeric take numChars mkString ""
}
