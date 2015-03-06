r_size = 10
reservoir = []

foo = []

# fill foo
loop do
  foo << rand(1..100)
  break if foo.size >= 50
end

# fill reservoir with foo values up to r_size
foo.each_with_index do |v, k|
  reservoir << v
  break if reservoir.size >= r_size
end

# replace reservoir values with random values from the rest of foo
for i in r_size..foo.size do
  j = rand(i) - 1
  if j < r_size
    reservoir[j] = foo[i]
  end
end

puts reservoir
