export default async function (eleventyConfig) {
  eleventyConfig.addWatchTarget("src/css");
  eleventyConfig.addPassthroughCopy("src/css");

  return {
    dir: {
      output: "dist",
      input: "src",
    },
  };
}
