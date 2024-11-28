class Solution(object):
    def countFairPairs(self, nums, lower, upper):
        nums.sort()
        n = len(nums)
        pairs = 0

        for i in range(n):
            left = i + 1
            right = n - 1

            while left <= right:
                mid = (left + right) // 2
                if nums[i] + nums[mid] >= lower:
                    right = mid - 1
                else:
                    left = mid + 1
            start = left
            left = i + 1
            right = n - 1
            while left <= right:
                mid = (left + right) // 2
                if nums[i] + nums[mid] <= upper:
                    left = mid + 1
                else:
                    right = mid - 1
            end = right

            if start <= end:
                pairs += end - start + 1

        return pairs