object User {
  def apply(id: String, name: String, accessLevel: Int): User = User(UserId(id), UserName(name), UserAccessLevel(accessLevel))
}

final case class User(id: UserId, name: UserName, accessLevel: UserAccessLevel) {
  val canEditVideos: Boolean = accessLevel.value >= 3
}
