object UserAccessLevelMother {
  def apply(value: Int = IntMother.random): UserAccessLevel = UserAccessLevel(value)

  def random: UserAccessLevel = apply()
}
