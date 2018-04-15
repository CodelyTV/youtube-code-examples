object UserAccessLevelStub {
  def apply(value: Int = IntStub.random): UserAccessLevel = UserAccessLevel(value)

  def random: UserAccessLevel = apply()
}
